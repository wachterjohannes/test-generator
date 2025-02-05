<?php

namespace App;

class ModelWithSetGetInt
{
    private int $title = 0;

    public function setTitle(int $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): int
    {
        return $this->title;
    }
}

?>
---
<?php

namespace App\Tests\Unit;

use App\ModelWithSetGetInt;
use PHPUnit\Framework\TestCase;

class ModelWithSetGetIntTest extends TestCase
{
    public function testSetGetTitle(): void
    {
        $model = $this->createInstance();
        $this->assertNull($model->getTitle());
        $model->setTitle(1);
        $this->assertSame(1, $model->getTitle());
        $this->markAsRisky();
    }

    public function createInstance(): ModelWithSetGetInt
    {
        return new ModelWithSetGetInt();
    }
}
