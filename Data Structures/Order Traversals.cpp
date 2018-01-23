/* 
 * File:   main.cpp
 * Author: zrt1992
 *
 * Created on January 23, 2018, 1:54 PM
 */

#include <cstdlib>
#include <iostream>

using namespace std;

/*
 * 
 */
struct Node {
    int data;
    Node *right = NULL;
    Node *left = NULL;
};

struct Node* newNode(int data) {
    Node *node = new Node();
    node->data = data;
    node->left = NULL;
    node->right = NULL;
    return node;

}

void printInorder(Node *node) {

    if (node->left != NULL) {
        printInorder(node->left);
    }

    cout << node->data;
    if (node->right != NULL) {
        printInorder(node->right);
    }


}

void printPreorder(Node *node) {
     cout << node->data;
    if (node->left != NULL) {
        printPreorder(node->left);
    }

    
    if (node->right != NULL) {
        printPreorder(node->right);
    }
   
}

int main(int argc, char** argv) {
    Node *root = newNode(1);
    root->left = newNode(2);
    root->right = newNode(3);
    root->left->left = newNode(4);
    root->left->right = newNode(5);
    root->left->right->left = newNode(9);

    cout << "\nPreorder traversal of binary tree is \n";
    printInorder(root);
     //printPreorder(root);

    return 0;
}

