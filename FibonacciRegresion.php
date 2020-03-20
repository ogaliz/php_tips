<?php


namespace maths;


class FibonacciRegresion
{
    /**
     * Al pasar un parámetro, mostrar la regresión de Fibo, dónde el número es la suma de los dos números anteriores
     * @param int $steps
     */
    public static function FibonacciRegression($steps): void
    {
        $resultado = 1;
        $post = 0;
        $ante = 0;

        print $resultado;

        for ($i = 0; $i < $steps; $i++){

            $post = $resultado;

            print $post;

            $ante = $post;


        }
    }

}

FibonacciRegresion::FibonacciRegression(6);




$x = 0;
$y = 1;

for($i=0;$i<=10;$i++)
{
$z = $x + $y;
echo $z."<br />";
$x=$y;
$y=$z;
}
/**
function fibonacci($n,$first = 0,$second = 1)
{
$fib = [$first,$second];
for($i=1;$i<$n;$i++)
{
$fib[] = $fib[$i]+$fib[$i-1];
}
return $fib;
}
echo "<pre>";
print_r(fibonacci(50));


 */


