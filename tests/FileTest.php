<?php
namespace TDD\Test;
use PHPUnit\Framework\TestCase;
use TDD\SrcFile;


class Filetest extends TestCase {

    public function testSum() {

        $obj = new SrcFile();
        $input = [0, 2, 5, 8];
        $output = $obj->sum($input);

        $this->assertEquals(
            15,
            $output,
            'When summing the total should equal 15');
    }

    public function testAgeCalc() {
        $obj = new SrcFile();
        $output = $obj->ageCalc(2021, 1987);
        $this->assertEquals(34, $output, 'Wrong age calculated, expected: 34');
    }

    public function testAdd() {
        $obj1 = new SrcFile();
        $output1 = $obj1->add(4, 4);
        $this->assertEquals(8, $output1, 'Wrong numbers added, expected: 8');

        $obj2 = new SrcFile();
        $output2 = $obj2->add(3, 2);
        $this->assertEquals(5, $output2, 'Wrong numbers added, expected: 5');

        $obj3 = new SrcFile();
        $output3 = $obj3->add(-4, 6);
        $this->assertEquals(2, $output3, 'Wrong numbers added, expected: 2');

        $obj4 = new SrcFile();
        $output4 = $obj4->add(1, 0);
        $this->assertEquals(1, $output4, 'Wrong numbers added, expected: 1');

        $obj5 = new SrcFile();
        $output5 = $obj5->add(0.4, 0.3);
        $this->assertEquals(0.7, $output5, 'Wrong numbers added, expected: 0.7');
    }
}
