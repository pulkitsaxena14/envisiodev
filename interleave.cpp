#include<iostream>
#include<string.h>
using namespace std;
bool isinterleav(char a[], char b[], char c[], int i, int j, int k) {
 
	if(i == -1 && k == -1 && j == -1) return true;
 
 	bool x = false, y = false ;
	if(a[i] == c[k]) x = isinterleav(a,b,c,i-1,j,k-1);
	if(b[j] == c[k]) y = isinterleav(a,b,c,i,j-1,k-1);
	return x || y;
}
 
int main() {
 
	char a[] = "XXY", b[] = "XXZ", c[] = "XXXXZY";
	int i, j, k;
 
	i = strlen(a)-1;
	j = strlen(b)-1;
	k = strlen(c)-1;
 
	if(isinterleav(a,b,c,i,j,k))
		cout << "true" << endl;
	else cout << "false" << endl;
 
	return 0;
}
