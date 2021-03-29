<?php

namespace GraphQL\SchemaObject;

class FilterTypeInputInputObject extends InputObject
{
    protected $eq;
    protected $finset;
    protected $from;
    protected $gt;
    protected $gteq;
    protected $in;
    protected $like;
    protected $lt;
    protected $lteq;
    protected $moreq;
    protected $neq;
    protected $nin;
    protected $notnull;
    protected $null;
    protected $to;

    public function setEq($eq)
    {
        $this->eq = $eq;

        return $this;
    }

    public function setFinset(array $finset)
    {
        $this->finset = $finset;

        return $this;
    }

    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    public function setGt($gt)
    {
        $this->gt = $gt;

        return $this;
    }

    public function setGteq($gteq)
    {
        $this->gteq = $gteq;

        return $this;
    }

    public function setIn(array $in)
    {
        $this->in = $in;

        return $this;
    }

    public function setLike($like)
    {
        $this->like = $like;

        return $this;
    }

    public function setLt($lt)
    {
        $this->lt = $lt;

        return $this;
    }

    public function setLteq($lteq)
    {
        $this->lteq = $lteq;

        return $this;
    }

    public function setMoreq($moreq)
    {
        $this->moreq = $moreq;

        return $this;
    }

    public function setNeq($neq)
    {
        $this->neq = $neq;

        return $this;
    }

    public function setNin(array $nin)
    {
        $this->nin = $nin;

        return $this;
    }

    public function setNotnull($notnull)
    {
        $this->notnull = $notnull;

        return $this;
    }

    public function setNull($null)
    {
        $this->null = $null;

        return $this;
    }

    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }
}
