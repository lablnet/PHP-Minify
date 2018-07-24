<?php 
  /**
   * PHP-Minify-Class
   *
   * @author   Malik Umer Farooq <lablnet01@gmail.com>
   * @author-profile https://www.facebook.com/malikumerfarooq01/
   * @license MIT 
   * @link   https://github.com/Lablnet/PHP-Minify-Class
   *
   */
class Minify {

	/**
     * Fetch the content of file.
     *
     * @return mix-data
     */
	public function getFile($file)
	{
		return file_get_contents($file);
	}
	/**
     * Remove White spaces,tabs,new lines etc.
     *
     * @return mix-data
     */	
	public function cleanSpaces($file)
	{	
		$file = $this->getFile($file);
		$file = str_replace("\n?>",' ?>',$file);
		return  str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $file);

	}
	/**
     * Remove comments
     *
     * @return mix-data
     */	
	public function removeComments($file)
	{
        $file = preg_replace("/<!--(.*?)-->/i" , "" ,$file);
        $file = preg_replace("!/\*.*?\*/!s" , "" ,$file);
        $file = preg_replace('@(?<!https:)+(?<!http:)+?<![A-Za-z0-9-]//.*@', '', $file);
        return $file;
	}
	/**
     * Add single space after <?php
     *
     * @return mix-data
     */	
	public function fixMaster($file)
	{
		return preg_replace('/(<?php)/i', '$0', $file);
	}
	/**
     * Minify html
     *
     * @return mix-data
     */	
	public function htmlMinify($file)
	{
		$file = $this->cleanSpaces($file);
		$file = $this->fixMaster($file);
		$file = $this->removeComments($file);
		return $file;
	}
}