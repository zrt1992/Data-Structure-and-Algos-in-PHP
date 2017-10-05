/* 
 * File:   main.cpp
 * Author: zrt1992
 *
 * Created on July 29, 2017, 11:08 PM
 */
#include <cstdlib>
#include <iostream>

using namespace std;
struct Node {
    Node *next = NULL;
    int data;
};
/*
 * 
 */
int main(int argc, char** argv) {
    Node *temp = new Node();
    temp->data=9;
    cout<<temp->data;
    
    return 0;
}

