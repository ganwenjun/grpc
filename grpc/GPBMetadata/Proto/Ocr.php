<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/ocr.proto

namespace GPBMetadata\Proto;

class Ocr
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
?
proto/ocr.protoproto"1
RecognizeBusinessLicenseParam
photoUrl (	"?
 RecognizeBusinessLicenseResponse
type (	H ?
establishDate (	H?
validPeriod (	H?
business (	H?
angle (H?
registerNumber (	H?
address (	H?
capital (	H?
name	 (	H?
legalPerson
 (	H	?B
_typeB
_establishDateB
_validPeriodB
	_businessB
_angleB
_registerNumberB

_addressB

_capitalB
_nameB
_legalPerson"<
RecognizeIdentityCardParam
side (	
photoUrl (	"?
RecognizeIdentityCardResponse*
face (2.proto.IdentityCardFaceH ?*
back (2.proto.IdentityCardBackH?B
_faceB
_back"?
IdentityCardFace
	birthDate (	H ?
gender (	H?
address (	H?
nationality (	H?
name (	H?
idNumber (	H?B

_birthDateB	
_genderB

_addressB
_nationalityB
_nameB
	_idNumber"x
IdentityCardBack
endDate (	H ?
issue (	H?
	startDate (	H?B

_endDateB
_issueB

_startDateBZ/pbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

