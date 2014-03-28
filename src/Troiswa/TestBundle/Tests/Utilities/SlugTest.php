<?php
use Troiswa\TestBundle\Utilities\Slug;


class SlugTest extends \PHPUnit_Framework_TestCase
{
	/**
     * @covers \Troiswa\TestBundle\Utilities/Slug::slugify
     */
	public function testReturnStringSlugify()
	{
		$s=Slug::Slugify('-zd80 a_ !!-');
		$this->assertInternalType('string', $s);
	}

	/**
     * @covers \Troiswa\TestBundle\Utilities/Slug::slugify
     */
	public function testRegexStringSlugify()
	{
		$s=Slug::Slugify('-zd80 a_ !!-');
		$this->assertRegExp('/\\W+/', $s);
	}

	/**
     * @covers \Troiswa\TestBundle\Utilities/Slug::slugify
     */
	public function testTrimSlugifyEndNotWithDash()
	{
		$s=Slug::Slugify('-zd80 a_ !!-');
		$this->assertStringEndsNotWith('-', $s);
	}

	/**
     * @covers \Troiswa\TestBundle\Utilities/Slug::slugify
     */
	public function testTrimSlugifyStartNotWithDash()
	{
		$s=Slug::Slugify('-zd80 a_ !!-');
		$this->assertStringStartsNotWith('-', $s);
	}

	/**
     * @covers \Troiswa\TestBundle\Utilities/Slug::slugify
     * @expectedException InvalidArgumentException
     */
	public function testStringSlugifyNotEmpty()
	{
		$s=Slug::Slugify('-------');
		$this->assertEmpty($s);
	}

	/**
     * @covers \Troiswa\TestBundle\Utilities/Slug::slugify
     */
	public function testStrtolowerStringSlugify()
	{
		$s=Slug::Slugify('-zd80 a_ !!-');
		$this->assertRegExp('/^[a-z0-9-_]+$/', $s);
	}


}