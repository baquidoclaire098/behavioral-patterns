<?php 

require_once 'SimpleAverageStrategy.php';
require_once 'WeightedAverageStrategy.php';
require_once 'TransmutedGradeStrategy.php';
require_once 'GradeCalculator.php';

$calculator = new GradeCalculator();

$grades = [88, 89, 89];

$calculator->setStrategy(new SimpleAverageStrategy());

echo "Strategy: Simple Average\n";
echo "Result: " . number_format($calculator->calculate($grades), 2) . "\n\n";

$weightedGrades = [
    ['score' => 85, 'weight' => 0.25],
    ['score' => 90, 'weight' => 0.35],
    ['score' => 95, 'weight' => 0.40],
];

$calculator->setStrategy(new WeightedAverageStrategy());

echo "Strategy: Weighted Average\n";
echo "Result: " .  number_format($calculator->calculate($weightedGrades), 2) . "\n\n";

$calculator->setStrategy(new TrasmutedGradeStrategy());

echo "Strategy: Transmuted Grade\n";
echo  "Result: " .  number_format($calculator->calculate($grades), 2) . "\n";
