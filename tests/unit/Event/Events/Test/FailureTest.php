<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Test;

use Exception;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Failure::class)]
final class FailureTest extends TestCase
{
    public function testConstructorSetsValues(): void
    {
        $testName  = 'foo';
        $throwable = new Exception('bar');

        $failure = new Failure(
            $testName,
            $throwable
        );

        $this->assertSame($testName, $failure->testName());
        $this->assertSame($throwable, $failure->throwable());
    }
}
