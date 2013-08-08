<?php

namespace Galaxy\InfoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
class NotificationTemplate
{

    /**
     * @var integer
     */
    protected $id;
    protected $incPoints;
    protected $incPointsActv;
    protected $incPointsProc;
    protected $incPointsMess;
    protected $incOwnElem;
    protected $incOwnElemActv;
    protected $incOwnElemMess;
    protected $incDurationMinElem;
    protected $incDurationMinElemActv;
    protected $incDurationMinElemMess;
    protected $incFlipAmount;
    protected $incFlipAmountActv;
    protected $incFlipAmountMess;
    protected $superjumpAmount;
    protected $superjumpAmountActv;
    protected $superjumpAmountMess;
    protected $incDurationAllElem;
    protected $incDurationAllElemActv;
    protected $incDurationAllElemMess;
    protected $decPoints;
    protected $decPointsActv;
    protected $decPointsProc;
    protected $decPointsMess;
    protected $decFlipAmount;
    protected $decFlipAmountActv;
    protected $decFlipAmountMess;
    protected $superjumpCancelActv;
    protected $superjumpCancelMess;
    protected $activeCancelActv;
    protected $activeCancelMess;
    protected $firstFlipperActv;
    protected $firstFlipperMess;
    protected $blackPointActv;
    protected $blackPointMess;
    protected $delElemGroupActv;
    protected $delElemGroupMess;
    protected $decDurationAllElem;
    protected $decDurationAllElemActv;
    protected $decDurationAllElemMess;
    protected $higherFlipperJumps;
    protected $lowerFlipperJumps;
    protected $firstFlipperJumps;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function getIncPoints()
    {
        return $this->incPoints;
    }

    public function setIncPoints($incPoints)
    {
        $this->incPoints = $incPoints;
    }

    public function getIncPointsActv()
    {
        return $this->incPointsActv;
    }

    public function setIncPointsActv($incPointsActv)
    {
        $this->incPointsActv = $incPointsActv;
    }

    public function getIncPointsProc()
    {
        return $this->incPointsProc;
    }

    public function setIncPointsProc($incPointsProc)
    {
        $this->incPointsProc = $incPointsProc;
    }

    public function getIncPointsMess()
    {
        return $this->incPointsMess;
    }

    public function setIncPointsMess($incPointsMess)
    {
        $this->incPointsMess = $incPointsMess;
    }

    public function getIncOwnElem()
    {
        return $this->incOwnElem;
    }

    public function setIncOwnElem($incOwnElem)
    {
        $this->incOwnElem = $incOwnElem;
    }

    public function getIncOwnElemActv()
    {
        return $this->incOwnElemActv;
    }

    public function setIncOwnElemActv($incOwnElemActv)
    {
        $this->incOwnElemActv = $incOwnElemActv;
    }

    public function getIncOwnElemMess()
    {
        return $this->incOwnElemMess;
    }

    public function setIncOwnElemMess($incOwnElemMess)
    {
        $this->incOwnElemMess = $incOwnElemMess;
    }

    public function getIncDurationMinElem()
    {
        return $this->incDurationMinElem;
    }

    public function setIncDurationMinElem($incDurationMinElem)
    {
        $this->incDurationMinElem = $incDurationMinElem;
    }

    public function getIncDurationMinElemActv()
    {
        return $this->incDurationMinElemActv;
    }

    public function setIncDurationMinElemActv($incDurationMinElemActv)
    {
        $this->incDurationMinElemActv = $incDurationMinElemActv;
    }

    public function getIncDurationMinElemMess()
    {
        return $this->incDurationMinElemMess;
    }

    public function setIncDurationMinElemMess($incDurationMinElemMess)
    {
        $this->incDurationMinElemMess = $incDurationMinElemMess;
    }

    public function getIncFlipAmount()
    {
        return $this->incFlipAmount;
    }

    public function setIncFlipAmount($incFlipAmount)
    {
        $this->incFlipAmount = $incFlipAmount;
    }

    public function getIncFlipAmountActv()
    {
        return $this->incFlipAmountActv;
    }

    public function setIncFlipAmountActv($incFlipAmountActv)
    {
        $this->incFlipAmountActv = $incFlipAmountActv;
    }

    public function getIncFlipAmountMess()
    {
        return $this->incFlipAmountMess;
    }

    public function setIncFlipAmountMess($incFlipAmountMess)
    {
        $this->incFlipAmountMess = $incFlipAmountMess;
    }

    public function getSuperjumpAmount()
    {
        return $this->superjumpAmount;
    }

    public function setSuperjumpAmount($superjumpAmount)
    {
        $this->superjumpAmount = $superjumpAmount;
    }

    public function getSuperjumpAmountActv()
    {
        return $this->superjumpAmountActv;
    }

    public function setSuperjumpAmountActv($superjumpAmountActv)
    {
        $this->superjumpAmountActv = $superjumpAmountActv;
    }

    public function getSuperjumpAmountMess()
    {
        return $this->superjumpAmountMess;
    }

    public function setSuperjumpAmountMess($superjumpAmountMess)
    {
        $this->superjumpAmountMess = $superjumpAmountMess;
    }

    public function getIncDurationAllElem()
    {
        return $this->incDurationAllElem;
    }

    public function setIncDurationAllElem($incDurationAllElem)
    {
        $this->incDurationAllElem = $incDurationAllElem;
    }

    public function getIncDurationAllElemActv()
    {
        return $this->incDurationAllElemActv;
    }

    public function setIncDurationAllElemActv($incDurationAllElemActv)
    {
        $this->incDurationAllElemActv = $incDurationAllElemActv;
    }

    public function getIncDurationAllElemMess()
    {
        return $this->incDurationAllElemMess;
    }

    public function setIncDurationAllElemMess($incDurationAllElemMess)
    {
        $this->incDurationAllElemMess = $incDurationAllElemMess;
    }

    public function getDecPoints()
    {
        return $this->decPoints;
    }

    public function setDecPoints($decPoints)
    {
        $this->decPoints = $decPoints;
    }

    public function getDecPointsActv()
    {
        return $this->decPointsActv;
    }

    public function setDecPointsActv($decPointsActv)
    {
        $this->decPointsActv = $decPointsActv;
    }

    public function getDecPointsProc()
    {
        return $this->decPointsProc;
    }

    public function setDecPointsProc($decPointsProc)
    {
        $this->decPointsProc = $decPointsProc;
    }

    public function getDecPointsMess()
    {
        return $this->decPointsMess;
    }

    public function setDecPointsMess($decPointsMess)
    {
        $this->decPointsMess = $decPointsMess;
    }

    public function getDecFlipAmount()
    {
        return $this->decFlipAmount;
    }

    public function setDecFlipAmount($decFlipAmount)
    {
        $this->decFlipAmount = $decFlipAmount;
    }

    public function getDecFlipAmountActv()
    {
        return $this->decFlipAmountActv;
    }

    public function setDecFlipAmountActv($decFlipAmountActv)
    {
        $this->decFlipAmountActv = $decFlipAmountActv;
    }

    public function getDecFlipAmountMess()
    {
        return $this->decFlipAmountMess;
    }

    public function setDecFlipAmountMess($decFlipAmountMess)
    {
        $this->decFlipAmountMess = $decFlipAmountMess;
    }

    public function getSuperjumpCancelActv()
    {
        return $this->superjumpCancelActv;
    }

    public function setSuperjumpCancelActv($superjumpCancelActv)
    {
        $this->superjumpCancelActv = $superjumpCancelActv;
    }

    public function getSuperjumpCancelMess()
    {
        return $this->superjumpCancelMess;
    }

    public function setSuperjumpCancelMess($superjumpCancelMess)
    {
        $this->superjumpCancelMess = $superjumpCancelMess;
    }

    public function getActiveCancelActv()
    {
        return $this->activeCancelActv;
    }

    public function setActiveCancelActv($activeCancelActv)
    {
        $this->activeCancelActv = $activeCancelActv;
    }

    public function getActiveCancelMess()
    {
        return $this->activeCancelMess;
    }

    public function setActiveCancelMess($activeCancelMess)
    {
        $this->activeCancelMess = $activeCancelMess;
    }

    public function getFirstFlipperActv()
    {
        return $this->firstFlipperActv;
    }

    public function setFirstFlipperActv($firstFlipperActv)
    {
        $this->firstFlipperActv = $firstFlipperActv;
    }

    public function getFirstFlipperMess()
    {
        return $this->firstFlipperMess;
    }

    public function setFirstFlipperMess($firstFlipperMess)
    {
        $this->firstFlipperMess = $firstFlipperMess;
    }

    public function getBlackPointActv()
    {
        return $this->blackPointActv;
    }

    public function setBlackPointActv($blackPointActv)
    {
        $this->blackPointActv = $blackPointActv;
    }

    public function getBlackPointMess()
    {
        return $this->blackPointMess;
    }

    public function setBlackPointMess($blackPointMess)
    {
        $this->blackPointMess = $blackPointMess;
    }

    public function getDelElemGroupActv()
    {
        return $this->delElemGroupActv;
    }

    public function setDelElemGroupActv($delElemGroupActv)
    {
        $this->delElemGroupActv = $delElemGroupActv;
    }

    public function getDelElemGroupMess()
    {
        return $this->delElemGroupMess;
    }

    public function setDelElemGroupMess($delElemGroupMess)
    {
        $this->delElemGroupMess = $delElemGroupMess;
    }

    public function getDecDurationAllElem()
    {
        return $this->decDurationAllElem;
    }

    public function setDecDurationAllElem($decDurationAllElem)
    {
        $this->decDurationAllElem = $decDurationAllElem;
    }

    public function getDecDurationAllElemActv()
    {
        return $this->decDurationAllElemActv;
    }

    public function setDecDurationAllElemActv($decDurationAllElemActv)
    {
        $this->decDurationAllElemActv = $decDurationAllElemActv;
    }

    public function getDecDurationAllElemMess()
    {
        return $this->decDurationAllElemMess;
    }

    public function setDecDurationAllElemMess($decDurationAllElemMess)
    {
        $this->decDurationAllElemMess = $decDurationAllElemMess;
    }
    
    public function getHigherFlipperJumps() {
        return $this->higherFlipperJumps;
    }

    public function setHigherFlipperJumps($higherFlipperJumps) {
        $this->higherFlipperJumps = $higherFlipperJumps;
    }

    public function getLowerFlipperJumps() {
        return $this->lowerFlipperJumps;
    }

    public function setLowerFlipperJumps($lowerFlipperJumps) {
        $this->lowerFlipperJumps = $lowerFlipperJumps;
    }

    public function getFirstFlipperJumps() {
        return $this->firstFlipperJumps;
    }

    public function setFirstFlipperJumps($firstFlipperJumps) {
        $this->firstFlipperJumps = $firstFlipperJumps;
    }



}
