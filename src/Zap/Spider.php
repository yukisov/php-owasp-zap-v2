<?php
/**
 * Zed Attack Proxy (ZAP) and its related class files.
 *
 * ZAP is an HTTP/HTTPS proxy for assessing web application security.
 *
 * Copyright the ZAP development team
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace Zap;


/**
 * This file was automatically generated.
 */
class Spider {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

	public function status() {
		return $this->zap->request($this->zap->base . 'spider/view/status/')->{'status'};
	}

	public function results() {
		return $this->zap->request($this->zap->base . 'spider/view/results/')->{'results'};
	}

	public function excludedFromScan() {
		return $this->zap->request($this->zap->base . 'spider/view/excludedFromScan/')->{'excludedFromScan'};
	}

	public function optionMaxDepth() {
		return $this->zap->request($this->zap->base . 'spider/view/optionMaxDepth/')->{'MaxDepth'};
	}

	public function optionScopeText() {
		return $this->zap->request($this->zap->base . 'spider/view/optionScopeText/')->{'ScopeText'};
	}

	public function optionScope() {
		return $this->zap->request($this->zap->base . 'spider/view/optionScope/')->{'Scope'};
	}

	public function optionThreadCount() {
		return $this->zap->request($this->zap->base . 'spider/view/optionThreadCount/')->{'ThreadCount'};
	}

	public function optionPostForm() {
		return $this->zap->request($this->zap->base . 'spider/view/optionPostForm/')->{'PostForm'};
	}

	public function optionProcessForm() {
		return $this->zap->request($this->zap->base . 'spider/view/optionProcessForm/')->{'ProcessForm'};
	}

	public function optionSkipURLString() {
		return $this->zap->request($this->zap->base . 'spider/view/optionSkipURLString/')->{'SkipURLString'};
	}

	public function optionRequestWaitTime() {
		return $this->zap->request($this->zap->base . 'spider/view/optionRequestWaitTime/')->{'RequestWaitTime'};
	}

	public function optionUserAgent() {
		return $this->zap->request($this->zap->base . 'spider/view/optionUserAgent/')->{'UserAgent'};
	}

	public function optionParseComments() {
		return $this->zap->request($this->zap->base . 'spider/view/optionParseComments/')->{'ParseComments'};
	}

	public function optionParseRobotsTxt() {
		return $this->zap->request($this->zap->base . 'spider/view/optionParseRobotsTxt/')->{'ParseRobotsTxt'};
	}

	public function optionParseSVNEntries() {
		return $this->zap->request($this->zap->base . 'spider/view/optionParseSVNEntries/')->{'ParseSVNEntries'};
	}

	public function optionParseGit() {
		return $this->zap->request($this->zap->base . 'spider/view/optionParseGit/')->{'ParseGit'};
	}

	public function optionHandleParameters() {
		return $this->zap->request($this->zap->base . 'spider/view/optionHandleParameters/')->{'HandleParameters'};
	}

	public function optionHandleODataParametersVisited() {
		return $this->zap->request($this->zap->base . 'spider/view/optionHandleODataParametersVisited/')->{'HandleODataParametersVisited'};
	}

	public function optionDomainsAlwaysInScope() {
		return $this->zap->request($this->zap->base . 'spider/view/optionDomainsAlwaysInScope/')->{'DomainsAlwaysInScope'};
	}

	public function optionDomainsAlwaysInScopeEnabled() {
		return $this->zap->request($this->zap->base . 'spider/view/optionDomainsAlwaysInScopeEnabled/')->{'DomainsAlwaysInScopeEnabled'};
	}

	public function scan($url, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/scan/', array('url' => $url));
	}

	public function scanAsUser($url, $contextid, $userid, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/scanAsUser/', array('url' => $url, 'contextId' => $contextid, 'userId' => $userid));
	}

	public function stop($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/stop/')->{'stop'};
	}

	public function clearExcludedFromScan($apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/clearExcludedFromScan/')->{'clearExcludedFromScan'};
	}

	public function excludeFromScan($regex, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/excludeFromScan/', array('regex' => $regex));
	}

	public function setOptionSkipURLString($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionSkipURLString/', array('String' => $string));
	}

	public function setOptionHandleParameters($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionHandleParameters/', array('String' => $string));
	}

	public function setOptionScopeString($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionScopeString/', array('String' => $string));
	}

	public function setOptionUserAgent($string, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionUserAgent/', array('String' => $string));
	}

	public function setOptionMaxDepth($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionMaxDepth/', array('Integer' => $integer));
	}

	public function setOptionThreadCount($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionThreadCount/', array('Integer' => $integer));
	}

	public function setOptionPostForm($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionPostForm/', array('Boolean' => $boolean));
	}

	public function setOptionProcessForm($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionProcessForm/', array('Boolean' => $boolean));
	}

	public function setOptionRequestWaitTime($integer, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionRequestWaitTime/', array('Integer' => $integer));
	}

	public function setOptionParseComments($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionParseComments/', array('Boolean' => $boolean));
	}

	public function setOptionParseRobotsTxt($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionParseRobotsTxt/', array('Boolean' => $boolean));
	}

	public function setOptionParseSVNEntries($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionParseSVNEntries/', array('Boolean' => $boolean));
	}

	public function setOptionParseGit($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionParseGit/', array('Boolean' => $boolean));
	}

	public function setOptionHandleODataParametersVisited($boolean, $apikey='') {
		return $this->zap->request($this->zap->base . 'spider/action/setOptionHandleODataParametersVisited/', array('Boolean' => $boolean));
	}

}
