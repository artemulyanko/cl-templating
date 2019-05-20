<?php


namespace ClTemplating;


class Renderer
{
    /**
     * @var PathResolver
     */
    private $pathResolver;

    /**
     * Renderer constructor.
     * @param PathResolver $pathResolver
     */
    public function __construct(PathResolver $pathResolver)
    {
        $this->pathResolver = $pathResolver;
    }

    /**
     * @param string $file
     * @param array $context
     * @return false|string
     */
    public function renderTemplate(string $file, array $context)
    {
        ob_start();
        $this->renderToOb($file, $context);
        return ob_get_clean();
    }

    /**
     * @param string $file
     * @param array $context
     */
    private function renderToOb(string $file, array $context)
    {
        $use = function (string $template) use ($context, &$use) {
            include $this->pathResolver->resolve($template);
        };

        $use($file);
    }
}
