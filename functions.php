<?php
/**
 * Created by PhpStorm.
 * User: kinnari
 * Date: 5/2/18
 * Time: 2:40 PM
 */

function mergesort($data)
{
    // Only process if we're not down to one piece of data
    if (count($data) > 1)
    {

        // Find out the middle of the current data set and split it there to obtain to halfs
        $data_middle = round(count($data) / 2, 0, PHP_ROUND_HALF_DOWN);
        // and now for some recursive magic
        $data_part1  = mergesort(array_slice($data, 0, $data_middle));
        $data_part2  = mergesort(array_slice($data, $data_middle, count($data)));
        // Setup counters so we can remember which piece of data in each half we're looking at
        $counter1    = $counter2 = 0;
        // iterate over all pieces of the currently processed array, compare size & reassemble
        for ($i = 0; $i < count($data); $i++)
        {
            // if we're done processing one half, take the rest from the 2nd half
            if ($counter1 == count($data_part1))
            {
                $data[$i] = $data_part2[$counter2];
                ++$counter2;
                // if we're done with the 2nd half as well or as long as pieces in the first half are still smaller than the 2nd half
            }
            elseif (($counter2 == count($data_part2)) or ($data_part1[$counter1] > $data_part2[$counter2]))
            {
                $data[$i] = $data_part1[$counter1];
                ++$counter1;
            }
            else
            {
                $data[$i] = $data_part2[$counter2];
                ++$counter2;
            }
        }
    }
    return $data;
}

function quick_sort($array)
{
    // find array size
    $length = count($array);

    // base case test, if array of length 0 then just return array to caller
    if ($length <= 1)
    {
        return $array;
    }
    else
    {

        // select an item to act as our pivot point, since list is unsorted first position is easiest
        $pivot = $array[0];

        // declare our two arrays to act as partitions
        $left = $right = array();

        // loop and compare each item in the array to the pivot value, place item in appropriate partition
        for ($i = 1; $i < count($array); $i++)
        {
            if ($array[$i] > $pivot)
            {
                $left[] = $array[$i];
            }
            else
            {
                $right[] = $array[$i];
            }
        }

        // use recursion to now sort the left and right lists
        return array_merge(quick_sort($left), array(
            $pivot
        ), quick_sort($right));
    }
}


function insertion_Sort($my_array)
{
    for ($i = 0; $i < count($my_array); $i++)
    {
        $val = $my_array[$i];
        $j   = $i - 1;
        while ($j >= 0 && $my_array[$j] < $val)
        {
            $my_array[$j + 1] = $my_array[$j];
            $j--;
        }
        $my_array[$j + 1] = $val;
    }
    return $my_array;
}


function bubble_Sort($my_array)
{
    do
    {
        $swapped = false;
        for ($i = 0, $c = count($my_array) - 1; $i < $c; $i++)
        {
            if ($my_array[$i] < $my_array[$i + 1])
            {
                list($my_array[$i + 1], $my_array[$i]) = array(
                    $my_array[$i],
                    $my_array[$i + 1]
                );
                $swapped = true;
            }
        }
    } while ($swapped);
    return $my_array;
}



class Node
{
    private $_i;

    public function __construct($key)
    {
        $this->_i = $key;
    }

    public function getKey()
    {
        return $this->_i;
    }
}

function selection_sort($data)
{
    for ($i = 0; $i < count($data) - 1; $i++)
    {
        $min = $i;
        for ($j = $i + 1; $j < count($data); $j++)
        {
            if ($data[$j] > $data[$min])
            {
                $min = $j;
            }
        }
        $data = swap_positions($data, $i, $min);
    }
    return $data;
}

function swap_positions($data1, $left, $right)
{
    $backup_old_data_right_value = $data1[$right];
    $data1[$right]               = $data1[$left];
    $data1[$left]                = $backup_old_data_right_value;
    return $data1;
}