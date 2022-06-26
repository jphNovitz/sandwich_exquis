<?php
namespace App\Components;

//use App\Components\FormDisplayComponent;
use phpDocumentor\Reflection\Types\Mixed_;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\ExposeInTemplate;

#[AsTwigComponent('form-display-component')]
class FormDisplayComponent
{
    #[ExposeInTemplate]
    public $form;

    public function __construct(Mixed $form = 'toto', $fields = [])
    {
        $this->form = $form;
        $this->fields = $fields;

    }

     public function mount()
     {
     }


    public function getForm():mixed
    {
        return $this->form;
    }
}