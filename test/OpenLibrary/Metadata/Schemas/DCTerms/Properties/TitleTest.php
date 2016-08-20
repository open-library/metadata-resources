<?php
    
    use OpenLibrary\Metadata\Schemas\DCTerms\Properties\Title;
    
    use PHPUnit\Framework\TestCase;
    
    class TitleTest extends TestCase {
    
        
        public function testValidTitle () {
            $testString = 'This is a Title';
            
            $expect = 'This is a Title';
            
            $title = new Title($testString);
            
            $this->assertEquals($expect,$title->getValue());
        }
    
        public function testValidTitleTrimmed () {
            $testString = 'This is a Title ';
    
            $expect = 'This is a Title';
        
            $title = new Title($testString);
        
            $this->assertEquals($expect,$title->getValue());
        }
        
    }
