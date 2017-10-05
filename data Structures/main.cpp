// pointers to structures
#include <iostream>
#include <string>
#include <sstream>
using namespace std;

struct Node {
    Node *next = NULL;
    int data;
};
Node* add(int data, Node *back);
void printlist(Node *front);
Node* findMid(Node *first);

int main() {

    Node *front = NULL;
    Node *mid = NULL;
    int count = 0;
    int check = 0;
    do {
        cout << "Enter 0 to stop \n";
        cout << "Enter 1 to add \n";
        cout << "Enter 2 to delete \n";
        cout << "Enter 3 to print all linked list \n";
        cout << "Enter 4 to find mid \n";

        cin>>check;
        cin.ignore();

        switch (check) {

            case 1:
                int data;
                cout << "Enter number to enter\n";

                cin>>data;
                cin.ignore();
                front = add(data, front);
                break; /* optional */

            case 2:

                break; /* optional */
            case 3:
                printlist(front);
                break;
            case 4:
                mid = findMid(front);
                cout << mid->data;



        }


    } while (check != 0);




    return 0;
}

Node* findMid(Node *front) {
    Node *temp;
    temp = front;
    Node *mid = front;
    int count;
    if (front == NULL) {
        cout << "Nothing to print\n";


    } else {

        while (temp != NULL) {
            if (count & 1) mid = mid->next;
            ++count;
            cout << temp->data << " ";
            temp = temp->next;


        }

    }
    return mid;

}

Node* add(int data, Node *front) {
    Node *temp = new Node();
    temp->data = data;
    temp->next = front;
    return temp;



}

void printlist(Node *front) {
    Node *temp;
    temp = front;

    if (front == NULL) {
        cout << "Nothing to print\n";

    } else {
        cout << "print starts here\n";

        while (temp != NULL) {

            cout << temp->data << "\n";
            temp = temp->next;


        }
        cout << "\n";
    }



}