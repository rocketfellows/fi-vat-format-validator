<?php

namespace rocketfellows\FIVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

class FIVatFormatValidatorTest extends TestCase
{
    /**
     * @var FIVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new FIVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'FI00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'FI11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'FI99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'FI12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => '00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'FI123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'FI1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Fi12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'fI12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'fi12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
