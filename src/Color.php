<?php
namespace App;

class Color
{
	/**
     * The type of a Color
     *
     * @var string in [coeur, carreaux, trèfle, pique]
     */
    private $type;
	/**
     * The priority of a Color
     *
     * @var string in [a, b, c, d] with : (a > b > c > d)
     */
    private $priority;

    public function __construct(string $type, string $priority)
    {
        $this->type = $type;
        $this->priority = $priority;
    }

	/**
     * Get the type of a Color.
     *
     * @return string
     */
    public function getType(): string
    {
        return ucfirst($this->type);
    }

	/**
     * Get the priority of a Color.
     *
     * @return string
     */
    public function getPriority(): string
    {
        return $this->priority;
    }
}