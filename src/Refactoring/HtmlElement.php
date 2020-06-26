<?php

namespace RigorTalks\Refactoring;

class HtmlElement
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
        $this->content = $content;
        $this->attributes = $attributes;
    }

    public function render()
    {
        if (!empty($this->attributes)){

            $htmlAttributes = '';

            foreach ($this->attributes as $attribute => $value) {
                if (is_numeric($attribute)){
                    $htmlAttributes .= ' ' .$value;
                }else {
                    $htmlAttributes .= ' ' .$attribute.'="'.htmlentities($value, ENT_QUOTES, 'UTF-8').'"';
                }
            }

            $result = '<'.$this->name.$htmlAttributes.'>';
        } else {
            $result = '<'.$this->name.'>';
        }

        if (in_array($this->name,  ['br', 'hr', 'img', 'input', 'meta'])) {
            return htmlentities($result, ENT_QUOTES, 'UTF-8');
        }

        $result .= htmlentities($this->content, ENT_QUOTES, 'UTF-8');

        $result .= '</'.$this->name.'>';

        return htmlentities($result, ENT_QUOTES, 'UTF-8');
    }
}