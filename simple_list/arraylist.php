<?php

class ArrayList
{
    public array|string $arrayList;

    public function __construct($arr = "")
    {
        if (is_array($arr)) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [];
        }
    }

    /**
     * Thêm một phần tử vào cuối danh sách này.
     * @param $obj
     **/
    public function add($obj): void
    {
        array_push($this->arrayList, $obj);
    }

    /**
     * Xóa tất cả các phần tử khỏi danh sách này.
     **/
    public function clear(): void
    {
        $this->arrayList = [];
    }

    /**
     * Trả về phần tử tại vị trí đã chỉ định trong danh sách này
     * @param $index
     **/
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];

        } else {
            die("ERROR in ArrayList.get");
        }
    }


    /**
     * Kiểm tra nếu danh sách này không có phần tử nào.
     * @return boolean
     **/
    public function isEmpty()
    {
        return count($this->arrayList) == 0;
    }

    /**
     * Loại bỏ phần tử ở vị trí đã chỉ định trong danh sách này.
     * @param $index
     **/
    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = [];

            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) $newArrayList[] = $this->get($i);
            }

            $this->arrayList = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }

    public function size()
    {
        return count($this->arrayList);
    }

    /**
     * Sắp xếp danh sách theo thứ tự bảng chữ cái.
     **/
    public function sort()
    {
        sort($this->arrayList);
    }


    /**
     * Trả về một mảng chứa tất cả các phần tử trong danh sách này theo đúng thứ tự.
     * @return array
     **/
    public function toArray(): array|string
    {
        return $this->arrayList;
    }

    /**
     * Trả về true nếu tham số chứa một giá trị số nguyên
     * @param $toCheck
     * @return boolean
     */
    public function isInteger($toCheck): bool
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

}