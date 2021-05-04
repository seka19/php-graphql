<?php

namespace GraphQL\Arguments;

use GraphQL\Types\GraphQLType;

class GraphQLFieldArgument extends GraphQLArgument{
    private $defaultValue;
    private $deprecationReason;

    /**
     * GraphQLFieldArgument constructor.
     * @param string $id
     * @param GraphQLType $type
     * @param null $defaultValue
     */
    public function __construct(string $id, GraphQLType $type, $defaultValue=null, ?string $deprecationReason=null)
    {
        $this->id = $id;
        $this->type = $type;
        $this->defaultValue = $defaultValue;
        $this->deprecationReason = $deprecationReason ?? null;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->id;
    }

    /**
     * @return GraphQLType
     */
    public function getType(): GraphQLType
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getDeprecationReason(): ?string
    {
        return $this->deprecationReason;
    }

    /**
     * @return null
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }
}