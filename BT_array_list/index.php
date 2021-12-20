<?php
class ArrayList
{
    public int $size        = 0;
    public array $elements  = [];
    //chèn chỉ số
    public function insert($index, $obj): void
    {
        array_splice($this->elements, $index, 0, $obj);
    }
    //thêm 1 phần tử vào mảng
    public function add($obj): void
    {
        $this->elements[] = $obj;
    }
    //xóa 1 phần tử khỏi mảng
    public function remove($index): void
    {
        // unset($this->elements[$index]); // giữ nguyên chỉ số
        array_splice($this->elements, $index, 1);
    }
    //lấy chỉ số
    public function get($index)
    {
        return $this->elements[$index];
    }
    //làm trống
    public function clear(): void
    {
        $this->elements = [];
    }
    //thêm tất cả - mảng
    public function addAll($array): array
    {
        if (is_array($array)) {
            return $this->elements = $array;
        } else {
            echo "Lỗi!!!";
        }
    }
    //kiểm tra mảng trống hay không?
    public function isEmpty(): bool
    {
        if ((count($this->elements) == 0)) {
            return true;
        } else {
            return false;
        }
    }
    //sắp xếp mảng
    public function sort(): bool
    {
        return sort($this->elements);
    }
    //reset mảng
    public function reset(): string
    {
        return reset($this->elements);
    }
    //kiểm tra kích thước mảng
    public function size(): int
    {
        return $this->size = count($this->elements);
    }
}
$arraylist = new ArrayList();

$arraylist->add('Thùy');
$arraylist->add('Ngân');
$arraylist->add('An');
$arraylist->add('Tuấn');

echo $arraylist->get(0);
$arraylist->remove(1);
echo '<pre>';
print_r($arraylist);
echo '</pre>';
echo $arraylist->get(1);
$arraylist->clear();
echo '<pre>';
print_r($arraylist);
echo '</pre>';
$array = ['con gà', 'con vịt', 'con chim', 'con chó'];
$arraylist->addAll($array);
echo $arraylist->size();
echo '<pre>';
print_r($arraylist);

