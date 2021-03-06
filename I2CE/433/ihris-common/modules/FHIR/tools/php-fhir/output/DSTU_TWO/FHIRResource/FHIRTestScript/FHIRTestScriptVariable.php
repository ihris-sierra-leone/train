<?php namespace DSTU_TWO\FHIRResource\FHIRTestScript;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: May 13th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DSTU_TWO\FHIRElement\FHIRBackboneElement;
use DSTU_TWO\JsonSerializable;

/**
 * TestScript is a resource that specifies a suite of tests against a FHIR server implementation to determine compliance against the FHIR specification.
 */
class FHIRTestScriptVariable extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * Descriptive name for this variable.
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Will be used to grab the HTTP header field value from the headers that sourceId is pointing to.
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $headerField = null;

    /**
     * XPath or JSONPath against the fixture body.  When variables are defined, either headerField must be specified or path, but not both.
     * @var \DSTU_TWO\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * Fixture to evaluate the XPath/JSONPath expression or the headerField  against within this variable.
     * @var \DSTU_TWO\FHIRElement\FHIRId
     */
    public $sourceId = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'TestScript.Variable';

    /**
     * Descriptive name for this variable.
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Descriptive name for this variable.
     * @param \DSTU_TWO\FHIRElement\FHIRString $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Will be used to grab the HTTP header field value from the headers that sourceId is pointing to.
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getHeaderField()
    {
        return $this->headerField;
    }

    /**
     * Will be used to grab the HTTP header field value from the headers that sourceId is pointing to.
     * @param \DSTU_TWO\FHIRElement\FHIRString $headerField
     * @return $this
     */
    public function setHeaderField($headerField)
    {
        $this->headerField = $headerField;
        return $this;
    }

    /**
     * XPath or JSONPath against the fixture body.  When variables are defined, either headerField must be specified or path, but not both.
     * @return \DSTU_TWO\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * XPath or JSONPath against the fixture body.  When variables are defined, either headerField must be specified or path, but not both.
     * @param \DSTU_TWO\FHIRElement\FHIRString $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Fixture to evaluate the XPath/JSONPath expression or the headerField  against within this variable.
     * @return \DSTU_TWO\FHIRElement\FHIRId
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Fixture to evaluate the XPath/JSONPath expression or the headerField  against within this variable.
     * @param \DSTU_TWO\FHIRElement\FHIRId $sourceId
     * @return $this
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->name) $json['name'] = $this->name->jsonSerialize();
        if (null !== $this->headerField) $json['headerField'] = $this->headerField->jsonSerialize();
        if (null !== $this->path) $json['path'] = $this->path->jsonSerialize();
        if (null !== $this->sourceId) $json['sourceId'] = $this->sourceId->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<TestScriptVariable xmlns="http://hl7.org/fhir"></TestScriptVariable>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->name) $this->name->xmlSerialize(true, $sxe->addChild('name'));
        if (null !== $this->headerField) $this->headerField->xmlSerialize(true, $sxe->addChild('headerField'));
        if (null !== $this->path) $this->path->xmlSerialize(true, $sxe->addChild('path'));
        if (null !== $this->sourceId) $this->sourceId->xmlSerialize(true, $sxe->addChild('sourceId'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}