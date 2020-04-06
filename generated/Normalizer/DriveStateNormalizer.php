<?php

namespace Tesla\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DriveStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\DriveState';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\DriveState';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Tesla\Api\Model\DriveState();
        if (property_exists($data, 'shift_state') && $data->{'shift_state'} !== null) {
            $object->setShiftState($data->{'shift_state'});
        }
        elseif (property_exists($data, 'shift_state') && $data->{'shift_state'} === null) {
            $object->setShiftState(null);
        }
        if (property_exists($data, 'speed') && $data->{'speed'} !== null) {
            $object->setSpeed($data->{'speed'});
        }
        elseif (property_exists($data, 'speed') && $data->{'speed'} === null) {
            $object->setSpeed(null);
        }
        if (property_exists($data, 'power') && $data->{'power'} !== null) {
            $object->setPower($data->{'power'});
        }
        elseif (property_exists($data, 'power') && $data->{'power'} === null) {
            $object->setPower(null);
        }
        if (property_exists($data, 'latitude') && $data->{'latitude'} !== null) {
            $object->setLatitude($data->{'latitude'});
        }
        elseif (property_exists($data, 'latitude') && $data->{'latitude'} === null) {
            $object->setLatitude(null);
        }
        if (property_exists($data, 'longitude') && $data->{'longitude'} !== null) {
            $object->setLongitude($data->{'longitude'});
        }
        elseif (property_exists($data, 'longitude') && $data->{'longitude'} === null) {
            $object->setLongitude(null);
        }
        if (property_exists($data, 'heading') && $data->{'heading'} !== null) {
            $object->setHeading($data->{'heading'});
        }
        elseif (property_exists($data, 'heading') && $data->{'heading'} === null) {
            $object->setHeading(null);
        }
        if (property_exists($data, 'gps_as_of') && $data->{'gps_as_of'} !== null) {
            $object->setGpsAsOf($data->{'gps_as_of'});
        }
        elseif (property_exists($data, 'gps_as_of') && $data->{'gps_as_of'} === null) {
            $object->setGpsAsOf(null);
        }
        if (property_exists($data, 'native_location_supported') && $data->{'native_location_supported'} !== null) {
            $object->setNativeLocationSupported($data->{'native_location_supported'});
        }
        elseif (property_exists($data, 'native_location_supported') && $data->{'native_location_supported'} === null) {
            $object->setNativeLocationSupported(null);
        }
        if (property_exists($data, 'native_latitude') && $data->{'native_latitude'} !== null) {
            $object->setNativeLatitude($data->{'native_latitude'});
        }
        elseif (property_exists($data, 'native_latitude') && $data->{'native_latitude'} === null) {
            $object->setNativeLatitude(null);
        }
        if (property_exists($data, 'native_longitude') && $data->{'native_longitude'} !== null) {
            $object->setNativeLongitude($data->{'native_longitude'});
        }
        elseif (property_exists($data, 'native_longitude') && $data->{'native_longitude'} === null) {
            $object->setNativeLongitude(null);
        }
        if (property_exists($data, 'native_type') && $data->{'native_type'} !== null) {
            $object->setNativeType($data->{'native_type'});
        }
        elseif (property_exists($data, 'native_type') && $data->{'native_type'} === null) {
            $object->setNativeType(null);
        }
        if (property_exists($data, 'timestamp')) {
            $object->setTimestamp($data->{'timestamp'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'shift_state'} = $object->getShiftState();
        $data->{'speed'} = $object->getSpeed();
        $data->{'power'} = $object->getPower();
        $data->{'latitude'} = $object->getLatitude();
        $data->{'longitude'} = $object->getLongitude();
        $data->{'heading'} = $object->getHeading();
        $data->{'gps_as_of'} = $object->getGpsAsOf();
        $data->{'native_location_supported'} = $object->getNativeLocationSupported();
        $data->{'native_latitude'} = $object->getNativeLatitude();
        $data->{'native_longitude'} = $object->getNativeLongitude();
        $data->{'native_type'} = $object->getNativeType();
        if (null !== $object->getTimestamp()) {
            $data->{'timestamp'} = $object->getTimestamp();
        }
        return $data;
    }
}