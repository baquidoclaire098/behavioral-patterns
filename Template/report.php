<?php 

abstract class Report 
{
    public function generateReport()
    {
        $this->generateHeader();
        $data = $this->retrieveData();
        $this->formatData($data);
        $this->generateFooter();
    }

    protected function generateHeader()

    {
        echo "=====================\n";
    }

    abstract protected function retrieveData();

    abstract protected function formatData($data);

   protected function generateFooter()
    {
        echo "========================\n";
        echo " END OF REPORT\n";
        echo "========================\n\n";
    }

}
