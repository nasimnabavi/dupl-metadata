<?php

class TestIssues{




    /*
     * @param array|double $metadata**/
    public function foo($filter, $metadata) {
        /* @var string $filteredMeta **/
        $filteredMeta = $this->filterMetadata($filter, $metadata);
        $result = $this->analyzeMetadata($filteredMeta);

        if ($result) return array();

        $revisedMeta = $this->filterMetadata($filter);
        $result = $this->analyzeMetadata($revisedMeta);

        if (is_array($result)) {
            $result = $result[0];
        }

        return $result;
    }

    /* @return null|string **/
    public function filterMetadata($filter, $data) {

        if ($filter) {
            return null;
        } else {
            return $data . "str";
        }
    }

    /* @param string $metadata
     * @param array $filter
     *
     * @return boolean
     **/
    function analyzeMetadata($metadata, $filter = array()) {

        if (strlen($metadata) > 10) {
            return true;
        }

        return false;
    }

    //////////
}

/* @param string $metadata **/
/*function analyzeMetadata($metadata) {

    return $metadata;
}
*/

/* @param array $metadata **/
/*function analyzeMetadata($metadata) {



    return $metadata;
}*/
