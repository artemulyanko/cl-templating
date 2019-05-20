<?php
declare(strict_types = 1);

namespace ClTemplating;


class Templating
{

    /**
     * @var Renderer
     */
    private $renderer;

    /**
     * Templating constructor.
     * @param Renderer $renderer
     */
    public function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * @param string $template
     * @param array $data
     * @return string
     */
    public function render(string $template, array $data = []): string
    {
        return $this->renderer->renderTemplate($template, $data);
    }
}
