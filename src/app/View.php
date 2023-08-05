<?php

declare(strict_types=1);

namespace App;

use App\Exceptions\ViewNotFoundException;

class View
{
    public function __construct(
        protected string $view,
        protected array $params = [],
        protected string $layout = 'client'
    ) {
    }

    public static function make(string $view, array $params = [], string $layout = 'client'): static
    {
        return new static($view, $params, $layout);
    }

    public function render(): string
    {
        $viewPath = VIEW_PATH . '/' . $this->view . '.php';
        $layoutPath = VIEW_PATH . '/' . $this->layout . '/layout.php';

        if (!file_exists($viewPath)) {
            throw new ViewNotFoundException();
        }

        foreach ($this->params as $key => $value) {
            $$key = $value;
        }

        ob_start();

        // include '../views/client/layout.php';
        include $layoutPath;

        return (string) ob_get_clean();
    }

    public function __toString(): string
    {
        return $this->render();
    }

    public function __get(string $name)
    {
        return $this->params[$name] ?? null;
    }
}
