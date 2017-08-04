<?php 

namespace PHPTv;

class Audio extends Repository
{
	/**
	 * The current used endpoint string 
	 * 
	 * @var string
	 */
	protected $tvApiEndpoint = 'audio';

	/**
	 * Get information about the volume
	 */
	public function getVolumeInformation() : array
	{
		return $this->request('getVolumeInformation')[0] ?? [];
	}

	/**
	 * Set the volume
	 */
	public function setAudioVolume(int $volume) : array
	{
		return $this->request('setAudioVolume', [[
			'volume' => $volume, 'target' => 'speaker'
		]])[0] ?? [];
	} 
}