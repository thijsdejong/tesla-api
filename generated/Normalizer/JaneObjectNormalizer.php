<?php

namespace Tesla\Api\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    protected $normalizers = array('Tesla\\Api\\Model\\ErrorResponse' => 'Tesla\\Api\\Normalizer\\ErrorResponseNormalizer', 'Tesla\\Api\\Model\\CreateAccessTokenRequest' => 'Tesla\\Api\\Normalizer\\CreateAccessTokenRequestNormalizer', 'Tesla\\Api\\Model\\CreateAccessTokenResponse' => 'Tesla\\Api\\Normalizer\\CreateAccessTokenResponseNormalizer', 'Tesla\\Api\\Model\\RevokeAccessTokenRequest' => 'Tesla\\Api\\Normalizer\\RevokeAccessTokenRequestNormalizer', 'Tesla\\Api\\Model\\SetValetRequest' => 'Tesla\\Api\\Normalizer\\SetValetRequestNormalizer', 'Tesla\\Api\\Model\\SpeedLimitRequest' => 'Tesla\\Api\\Normalizer\\SpeedLimitRequestNormalizer', 'Tesla\\Api\\Model\\SetSpeedLimitRequest' => 'Tesla\\Api\\Normalizer\\SetSpeedLimitRequestNormalizer', 'Tesla\\Api\\Model\\MovePanoRoofRequest' => 'Tesla\\Api\\Normalizer\\MovePanoRoofRequestNormalizer', 'Tesla\\Api\\Model\\RemoteSeatHeaterRequest' => 'Tesla\\Api\\Normalizer\\RemoteSeatHeaterRequestNormalizer', 'Tesla\\Api\\Model\\RemoteSteeringWheelHeaterRequest' => 'Tesla\\Api\\Normalizer\\RemoteSteeringWheelHeaterRequestNormalizer', 'Tesla\\Api\\Model\\SetTempsRequest' => 'Tesla\\Api\\Normalizer\\SetTempsRequestNormalizer', 'Tesla\\Api\\Model\\SetChargeLimitRequest' => 'Tesla\\Api\\Normalizer\\SetChargeLimitRequestNormalizer', 'Tesla\\Api\\Model\\RemoteStartRequest' => 'Tesla\\Api\\Normalizer\\RemoteStartRequestNormalizer', 'Tesla\\Api\\Model\\OpenTrunkRequest' => 'Tesla\\Api\\Normalizer\\OpenTrunkRequestNormalizer', 'Tesla\\Api\\Model\\NavigationRequestRequest' => 'Tesla\\Api\\Normalizer\\NavigationRequestRequestNormalizer', 'Tesla\\Api\\Model\\NavigationRequestRequestValue' => 'Tesla\\Api\\Normalizer\\NavigationRequestRequestValueNormalizer', 'Tesla\\Api\\Model\\ShareRequest' => 'Tesla\\Api\\Normalizer\\ShareRequestNormalizer', 'Tesla\\Api\\Model\\ShareRequestValue' => 'Tesla\\Api\\Normalizer\\ShareRequestValueNormalizer', 'Tesla\\Api\\Model\\SentryModeRequest' => 'Tesla\\Api\\Normalizer\\SentryModeRequestNormalizer', 'Tesla\\Api\\Model\\MaxDefrostRequest' => 'Tesla\\Api\\Normalizer\\MaxDefrostRequestNormalizer', 'Tesla\\Api\\Model\\WindowControlRequest' => 'Tesla\\Api\\Normalizer\\WindowControlRequestNormalizer', 'Tesla\\Api\\Model\\TriggerHomelinkRequest' => 'Tesla\\Api\\Normalizer\\TriggerHomelinkRequestNormalizer', 'Tesla\\Api\\Model\\GetVehiclesResponse' => 'Tesla\\Api\\Normalizer\\GetVehiclesResponseNormalizer', 'Tesla\\Api\\Model\\Vehicle' => 'Tesla\\Api\\Normalizer\\VehicleNormalizer', 'Tesla\\Api\\Model\\VehicleResponse' => 'Tesla\\Api\\Normalizer\\VehicleResponseNormalizer', 'Tesla\\Api\\Model\\MobileAccessResponse' => 'Tesla\\Api\\Normalizer\\MobileAccessResponseNormalizer', 'Tesla\\Api\\Model\\ChargeStateResponse' => 'Tesla\\Api\\Normalizer\\ChargeStateResponseNormalizer', 'Tesla\\Api\\Model\\ChargeState' => 'Tesla\\Api\\Normalizer\\ChargeStateNormalizer', 'Tesla\\Api\\Model\\ClimateSettingsResponse' => 'Tesla\\Api\\Normalizer\\ClimateSettingsResponseNormalizer', 'Tesla\\Api\\Model\\ClimateState' => 'Tesla\\Api\\Normalizer\\ClimateStateNormalizer', 'Tesla\\Api\\Model\\DriveStateResponse' => 'Tesla\\Api\\Normalizer\\DriveStateResponseNormalizer', 'Tesla\\Api\\Model\\DriveState' => 'Tesla\\Api\\Normalizer\\DriveStateNormalizer', 'Tesla\\Api\\Model\\GuistateResponse' => 'Tesla\\Api\\Normalizer\\GuistateResponseNormalizer', 'Tesla\\Api\\Model\\GuiState' => 'Tesla\\Api\\Normalizer\\GuiStateNormalizer', 'Tesla\\Api\\Model\\VehicleStateResponse' => 'Tesla\\Api\\Normalizer\\VehicleStateResponseNormalizer', 'Tesla\\Api\\Model\\VehicleState' => 'Tesla\\Api\\Normalizer\\VehicleStateNormalizer', 'Tesla\\Api\\Model\\VehicleStateMediaState' => 'Tesla\\Api\\Normalizer\\VehicleStateMediaStateNormalizer', 'Tesla\\Api\\Model\\VehicleStateSoftwareUpdate' => 'Tesla\\Api\\Normalizer\\VehicleStateSoftwareUpdateNormalizer', 'Tesla\\Api\\Model\\VehicleStateSpeedLimitMode' => 'Tesla\\Api\\Normalizer\\VehicleStateSpeedLimitModeNormalizer', 'Tesla\\Api\\Model\\VehicleConfigResponse' => 'Tesla\\Api\\Normalizer\\VehicleConfigResponseNormalizer', 'Tesla\\Api\\Model\\VehicleConfig' => 'Tesla\\Api\\Normalizer\\VehicleConfigNormalizer', 'Tesla\\Api\\Model\\VehicleDataResponse' => 'Tesla\\Api\\Normalizer\\VehicleDataResponseNormalizer', 'Tesla\\Api\\Model\\VehicleDataResponseResponse' => 'Tesla\\Api\\Normalizer\\VehicleDataResponseResponseNormalizer', 'Tesla\\Api\\Model\\WakeUpResponse' => 'Tesla\\Api\\Normalizer\\WakeUpResponseNormalizer', 'Tesla\\Api\\Model\\WakeUpResponseResponse' => 'Tesla\\Api\\Normalizer\\WakeUpResponseResponseNormalizer', 'Tesla\\Api\\Model\\CommandResponse' => 'Tesla\\Api\\Normalizer\\CommandResponseNormalizer', 'Tesla\\Api\\Model\\CommandResponseResponse' => 'Tesla\\Api\\Normalizer\\CommandResponseResponseNormalizer', 'Tesla\\Api\\Model\\NearbyChargerResponse' => 'Tesla\\Api\\Normalizer\\NearbyChargerResponseNormalizer', 'Tesla\\Api\\Model\\NearbyChargerResponseResponse' => 'Tesla\\Api\\Normalizer\\NearbyChargerResponseResponseNormalizer', 'Tesla\\Api\\Model\\DestinationCharger' => 'Tesla\\Api\\Normalizer\\DestinationChargerNormalizer', 'Tesla\\Api\\Model\\DestinationChargerLocation' => 'Tesla\\Api\\Normalizer\\DestinationChargerLocationNormalizer', 'Tesla\\Api\\Model\\Supercharger' => 'Tesla\\Api\\Normalizer\\SuperchargerNormalizer', 'Tesla\\Api\\Model\\SuperchargerLocation' => 'Tesla\\Api\\Normalizer\\SuperchargerLocationNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}