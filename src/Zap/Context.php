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
class Context {

	public function __construct ($zap) {
		$this->zap = $zap;
	}

    public function contextList() {
        /*
         * List context names of current session
         */
        return $this->zap->request($this->zap->base . 'context/view/contextList/')->{'contextList'};
	}

    public function excludeRegexs($contextname) {
        /*
         * List excluded regexs for context
         */
        return $this->zap->request($this->zap->base . 'context/view/excludeRegexs/', array('contextName' => $contextname))->{'excludeRegexs'};
	}

    public function includeRegexs($contextname) {
        /*
         * List included regexs for context
         */
        return $this->zap->request($this->zap->base . 'context/view/includeRegexs/', array('contextName' => $contextname))->{'includeRegexs'};
	}

    public function excludeFromContext($contextname, $regex, $apikey='') {
        /*
         * Add exclude regex to context
         */
        return $this->zap->request($this->zap->base . 'context/action/excludeFromContext/', array('contextName' => $contextname, 'regex' => $regex));
	}

    public function includeInContext($contextname, $regex, $apikey='') {
        /*
         * Add include regex to context
         */
        return $this->zap->request($this->zap->base . 'context/action/includeInContext/', array('contextName' => $contextname, 'regex' => $regex));
	}

    public function newContext($contextname, $apikey='') {
        /*
         * Creates a new context in the current session
         */
        return $this->zap->request($this->zap->base . 'context/action/newContext/', array('contextName' => $contextname));
	}

    public function setContextInScope($contextname, $booleaninscope, $apikey='') {
        /*
         * Sets a context to in scope (contexts are in scope by default)
         */
        return $this->zap->request($this->zap->base . 'context/action/setContextInScope/', array('contextName' => $contextname, 'booleanInScope' => $booleaninscope));
	}

}
