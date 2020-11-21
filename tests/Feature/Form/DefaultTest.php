<?php

namespace Datalogix\TALLKit\Tests\Feature\Form;

use Datalogix\TALLKit\Tests\TestCase;

class DefaultTest extends TestCase
{
    public function testCanSetADefaultValue()
    {
        $this->registerTestRoute('form.default-values');

        $this->visit('/form.default-values')
            ->seeElement('input[name="input"][value="a"]')
            ->seeInElement('textarea[name="textarea"]', 'b')
            ->seeElement('option[value="c"]:selected')
            ->seeElement('input[name="checkbox"]:checked')
            ->seeElement('input[name="radio"]:checked');
    }
}
