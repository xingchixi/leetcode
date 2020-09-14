<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include_once "binarytree.php";        

final class binarytreeTest extends TestCase
{

    public function testbinarytree(): void
    {

        /**************************
 
                1
              /   \
             2     3
           /  \     \
          4    5     9
         / \   /
        6   7  8
        **********************/

        $nodes = [];
        for($i=1; $i<10; $i++){
            $nodes[$i] = new BinaryTreeNode($i);
        }
        $nodes[1]->left  = $nodes[2];
        $nodes[1]->right = $nodes[3];
        $nodes[2]->left  = $nodes[4];
        $nodes[2]->right = $nodes[5];
        $nodes[3]->right = $nodes[9];
        $nodes[4]->left  = $nodes[6];
        $nodes[4]->right = $nodes[7];
        $nodes[5]->left  = $nodes[8];


        $seq = [];
        dfs($nodes[1], $seq);;
        $s = (getTreeNodesString($seq));
        $this->assertEquals($s, "1, 2, 4, 6, 7, 5, 8, 3, 9");

        $seq = [];
        bfs($nodes[1], $seq);
        $s = (getTreeNodesString($seq));
        $this->assertEquals($s, "1, 2, 3, 4, 5, 9, 6, 7, 8");

        $seq = dfs2($nodes[1]);;
        $s = (getTreeNodesString($seq));
        $this->assertEquals($s, "1, 2, 4, 6, 7, 5, 8, 3, 9");

        $seq = bfs2($nodes[1]);
        $s = (getTreeNodesString($seq));
        $this->assertEquals($s, "1, 2, 3, 4, 5, 9, 6, 7, 8");

        $seq = dfs3($nodes[1]);;
        $s = (getTreeNodesString($seq));
        $this->assertEquals($s, "1, 2, 4, 6, 7, 5, 8, 3, 9");

        $seq = bfs3($nodes[1]);
        $s = (getTreeNodesString($seq));
        $this->assertEquals($s, "1, 2, 3, 4, 5, 9, 6, 7, 8");

        $size = size($nodes[1]);
        $this->assertEquals($size, 9);


        $height = height($nodes[1]);
        $this->assertEquals($height, 4);

        $size = size2($nodes[1]);
        $this->assertEquals($size, 9);



    }
}