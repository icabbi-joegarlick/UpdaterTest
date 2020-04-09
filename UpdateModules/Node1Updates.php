<?PHP
class UpdateModule_Node1Update implements UpdateModule
{
    public $node = "node1";

    public function PreRun($GitFolder)
    {
        echo "prerun" . PHP_EOL;
    }

    public function Run($GitFolder)
    {
        echo "run" . PHP_EOL;
    }

    public function PostRun($GitFolder)
    {
        echo "postrun" . PHP_EOL;
    }
}
