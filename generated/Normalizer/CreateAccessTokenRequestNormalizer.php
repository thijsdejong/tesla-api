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
class CreateAccessTokenRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Tesla\\Api\\Model\\CreateAccessTokenRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Tesla\\Api\\Model\\CreateAccessTokenRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Tesla\Api\Model\CreateAccessTokenRequest();
        if (property_exists($data, 'grant_type')) {
            $object->setGrantType($data->{'grant_type'});
        }
        if (property_exists($data, 'client_id')) {
            $object->setClientId($data->{'client_id'});
        }
        if (property_exists($data, 'client_secret')) {
            $object->setClientSecret($data->{'client_secret'});
        }
        if (property_exists($data, 'email') && $data->{'email'} !== null) {
            $object->setEmail($data->{'email'});
        }
        elseif (property_exists($data, 'email') && $data->{'email'} === null) {
            $object->setEmail(null);
        }
        if (property_exists($data, 'password') && $data->{'password'} !== null) {
            $object->setPassword($data->{'password'});
        }
        elseif (property_exists($data, 'password') && $data->{'password'} === null) {
            $object->setPassword(null);
        }
        if (property_exists($data, 'refresh_token') && $data->{'refresh_token'} !== null) {
            $object->setRefreshToken($data->{'refresh_token'});
        }
        elseif (property_exists($data, 'refresh_token') && $data->{'refresh_token'} === null) {
            $object->setRefreshToken(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getGrantType()) {
            $data->{'grant_type'} = $object->getGrantType();
        }
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        }
        if (null !== $object->getClientSecret()) {
            $data->{'client_secret'} = $object->getClientSecret();
        }
        $data->{'email'} = $object->getEmail();
        $data->{'password'} = $object->getPassword();
        $data->{'refresh_token'} = $object->getRefreshToken();
        return $data;
    }
}