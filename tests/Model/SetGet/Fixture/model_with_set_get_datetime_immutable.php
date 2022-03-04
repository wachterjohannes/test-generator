<?php

namespace App;

class ModelWithSetGetBirthday
{
    private \DateTimeImmutable $birthday;

    public function setBirthday(\DateTimeImmutable $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getBirthday(): \DateTimeImmutable
    {
        return $this->birthday;
    }
}

?>
---
<?php

namespace App\Tests\Unit;

use App\ModelWithSetGetBirthday;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class ModelWithSetGetBirthdayTest extends TestCase
{
    public function testSetGetBirthday(): void
    {
        $model = $this->createInstance();
        $this->assertNull($model->getBirthday());
        $model->setBirthday(new DateTimeImmutable('2022-01-01'));
        $this->assertSame(new DateTimeImmutable('2022-01-01'), $model->getBirthday());
        $this->markAsRisky();
    }

    public function createInstance(): ModelWithSetGetBirthday
    {
        return new ModelWithSetGetBirthday();
    }
}