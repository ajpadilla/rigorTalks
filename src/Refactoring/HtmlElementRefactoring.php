<?php

namespace RigorTalks\Refactoring;

class HtmlElementRefactoring
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $content;

    /**
     * @var array
     */
    private $attributes;

    public function __construct(string $name, $attributes = [],string $content = null)
    {
        $this->name = $name;
        $this->attributes =  new HtmlAttributes($attributes);
        $this->content = $content;
    }


    public function render()
    {
        if ($this->isVoid()) {
            return $this->open();
        }

        return $this->open().$this->content().$this->close();
    }

    public function open()
    {
        return '<'.$this->name.$this->attributes().'>';
    }

    public function isVoid(): bool
    {
        return in_array($this->name, ['br', 'hr', 'img', 'input', 'meta']);
    }

    /**
     * @return string
     */
    public function content(): string
    {
        return htmlentities($this->content, ENT_QUOTES, 'UTF-8');
    }

    public function close()
    {
        return '</'.$this->name.'>';
    }

    public function attributes(): string
    {
        return $this->attributes->render();
    }

    /**
     * @return bool
     */
    public function hasAttributes(): bool
    {
        return ! empty($this->attributes);
    }

}
