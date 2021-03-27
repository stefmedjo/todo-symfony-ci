<?php

namespace App\Tests;

use App\Entity\Todo;
use PHPUnit\Framework\TestCase;

class TodoTest extends TestCase
{
    public function testTodoCreate(): void
    {
        $todo = new Todo();
        $todo->setContent("Sleep");
        $this->assertTrue($todo->getContent() === "Sleep");
    }
}
