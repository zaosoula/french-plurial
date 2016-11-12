<?php

class FrenchPlurialTest extends PHPUnit_Framework_TestCase
{
    public function testConvertPlurial()
    {
      $FrenchPlurial = new FrenchPlurial;
      $this->assertEquals('tests', $FrenchPlurial->convert('test'));
      $this->assertEquals('choux', $FrenchPlurial->convert('chou'));
      $this->assertEquals('poireaux', $FrenchPlurial->convert('poireau'));
      $this->assertEquals('ananas', $FrenchPlurial->convert('ananas'));
      $this->assertEquals('chevaux', $FrenchPlurial->convert('cheval'));
      $this->assertEquals('spiraux', $FrenchPlurial->convert('spiral'));
      $this->assertEquals('baux', $FrenchPlurial->convert('bail'));
      $this->assertEquals('éventails', $FrenchPlurial->convert('éventail'));
      $this->assertEquals('héros', $FrenchPlurial->convert('héro'));
      $this->assertEquals('tracteurs agricoles', $FrenchPlurial->convert('tracteur agricole'));
    }
}
 ?>
