<?php
declare(strict_types=1);

use Raxos\Contract\ExceptionInterface;

it('autoloads all public contracts without requiring their implementations', function (): void {
    $source = dirname(__DIR__) . '/src';
    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source, FilesystemIterator::SKIP_DOTS));
    $count = 0;
    foreach ($files as $file) {
        if ($file->getExtension() !== 'php') {
            continue;
        }
        $relative = substr($file->getPathname(), strlen($source) + 1, -4);
        $interface = 'Raxos\\Contract\\' . str_replace(DIRECTORY_SEPARATOR, '\\', $relative);
        expect(interface_exists($interface) || enum_exists($interface))->toBeTrue($interface);
        $reflection = new ReflectionClass($interface);
        expect($reflection->isInterface() || $reflection->isEnum())->toBeTrue();
        ++$count;
    }
    expect($count)->toBeGreaterThan(100);
});
