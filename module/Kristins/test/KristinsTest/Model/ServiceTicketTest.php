<?php
namespace KristinsTest\Model;

use Kristins\Model\ServiceTicket;
use PHPUnit_Framework_TestCase;

class ServiceTicketTest extends PHPUnit_Framework_TestCase
{
    public function testAlbumInitialState()
    {
        $album = new ServiceTicket();

        $this->assertNull($album->artist, '"artist" should initially be null');
        $this->assertNull($album->id, '"id" should initially be null');
        $this->assertNull($album->title, '"title" should initially be null');
    }

    public function testExchangeArraySetsPropertiesCorrectly()
    {
        $album = new ServiceTicket();
        $data  = array('artist' => 'some artist',
                       'id'     => 123,
                       'title'  => 'some title');

        $album->exchangeArray($data);

        $this->assertSame($data['artist'], $album->artist, '"artist" was not set correctly');
        $this->assertSame($data['id'], $album->id, '"id" was not set correctly');
        $this->assertSame($data['title'], $album->title, '"title" was not set correctly');
    }

    public function testExchangeArraySetsPropertiesToNullIfKeysAreNotPresent()
    {
        $album = new ServiceTicket();

        $album->exchangeArray(array('artist' => 'some artist',
                                    'id'     => 123,
                                    'title'  => 'some title'));
        $album->exchangeArray(array());

        $this->assertNull($album->artist, '"artist" should have defaulted to null');
        $this->assertNull($album->id, '"id" should have defaulted to null');
        $this->assertNull($album->title, '"title" should have defaulted to null');
    }
}