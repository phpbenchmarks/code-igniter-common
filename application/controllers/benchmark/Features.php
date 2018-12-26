<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Features extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		// enable sessions & template parser
		$this->load->library(['session', 'parser']);
		// load the "useful" package worker
		$this->load->library('worker');

		$this->load->helper('url');
	}

	/**
	 * Default controller entry point
	 */
	public function index()
	{
		redirect('/welcome/bench');
	}

	/**
	 * Perform prescribed work
	 */
	public function foo()
	{

		$this->load->model('foo');

		$locales = ['en', 'en_GB', 'fr_FR'];
		$pick1 = $locales[array_rand($locales)];
		$this->lang->load('phpbenchmarks', $pick1);

		// retrieve session key
		$sessionKey = $this->input->cookie('ci_session');

		// magic setter & getter use session storage here
		// save it in the session
		$this->session->phpbenchmarks = $sessionKey;
		// read the session key from the session
		$data['key'] = $this->session->phpbenchmarks;


		// read all lines from "Foo" table, pass to template??
		// no mapping prescribed, no template example provided
		// serialize Users data ... done as part of earlier "rest-api" benchmark
		// generate a calendar, templated, using the example referenced
		$headings = [];
		for ($i = 1; $i < 32; $i ++)
			$headings[] = ['day' => $i];
		$data['calhead'] = $headings;

		$index = 1;
		$rows = [];
		for ($hour = 0; $hour < 24; $hour ++)
		{
			$hourRow = '';
			for ($day = 1; $day < 32; $day ++)
			{
				$foo = Foo::mock($index ++ );
				$data['id'] = $foo->getId();
				$data['translated'] = $this->parser->parse_string($this->lang->line('smallOverload.translation'), ['index' => $foo->getId()], true);
				$data['date'] = date('Y-m-d', $foo->getDate());
				$data['dateTime'] = date('Y-m-d H:i:s', $foo->getDateTime());
				$data['fixedString'] = $foo->getFixedString();
				$data['variableString'] = $foo->getVariableString();
				$hourRow .= $this->parser->parse('calendar_cell', $data, true);
			}
			$rows[] = ['hour' => $hour, 'row' => $hourRow];
		}
		$data['calrows'] = $rows;

		$this->parser->parse('foo_view', $data);
	}

	/**
	 * Do nothing
	 */
	public function bar()
	{
		redirect('/welcome/bench');
	}

}
