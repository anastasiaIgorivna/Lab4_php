<?php
require_once 'Human.php';

class Programmer extends Human {
    private array $languages;
    private int $experience;

    public function __construct(float $height, float $weight, int $age, array $languages, int $experience) {
        parent::__construct($height, $weight, $age);
        $this->languages = $languages;
        $this->experience = $experience;
    }

    public function getLanguages(): array { return $this->languages; }
    public function getExperience(): int { return $this->experience; }

    public function setLanguages(array $languages): void { $this->languages = $languages; }
    public function setExperience(int $experience): void { $this->experience = $experience; }
}
