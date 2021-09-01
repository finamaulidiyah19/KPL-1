#include <iostream>
#include <conio.h>

using namespace std;

int main() {
	
	float p;
	float t;
	float uts;
	float uas;
	float pembagi=0.1;
	float na;
	string nama;
	string nim;
	string prodi;
	string matkul;
	char lagi;
	
	awal:
		system ("cls");
//		cout << "Nama  : Fina Maulidiyah N" << endl;
//		cout << "NIM   : 19051397034" << endl;
//		cout << "Prodi : D4 Manajemen Informatika 19A" << endl << endl;
		cout << "==========Hitung Nilai Mahasiswa Unesa & Konversi ke Nilai Huruf==========" << endl << endl;
		
		cout << "Nama Mahasiswa : ";
		cin >> nama;
		
		cout << "NIM : ";
		cin >> nim;
		
		cout << "Prodi : ";
		cin >> prodi;
		
		cout << "Mata Kuliah : ";
		cin >> matkul;
		
		cout << endl;		
		
		cout << "Partisipasi : ";
		cin >> p;
		
		if (p <= 0) {
			cout << "Input yang anda masukkan salah" << endl << endl;
			cout << "Mulai lagi (y/n) ? ";
			cin >> lagi;
				if(lagi=='Y' || lagi=='y'){
			        goto awal;
			    }
			    if (lagi=='N' || lagi=='n'){
			        goto selesai;
			    }
		}
		cout << "Nilai rata-rata Tugas : ";
		cin >> t;
		
		if (t <= 0) {
			cout << "Input yang anda masukkan salah" << endl << endl;
			cout << "Mulai lagi (y/n) ? ";
			cin >> lagi;
				if(lagi=='Y' || lagi=='y'){
			        goto awal;
			    }
			    if (lagi=='N' || lagi=='n'){
			        goto selesai;
			    }
		}
			    
		cout << "Nilai UTS : ";
		cin >> uts;
		
		if (uts <= 0) {
			cout << "Input yang anda masukkan salah" << endl << endl;
			cout << "Mulai lagi (y/n) ? ";
			cin >> lagi;
				if(lagi=='Y' || lagi=='y'){
			        goto awal;
			    }
			    if (lagi=='N' || lagi=='n'){
			        goto selesai;
			    }
		}
		
		cout << "Nilai UAS : ";
		cin >> uas;
		
		if (uas <= 0) {
			cout << "Input yang anda masukkan salah" << endl << endl;
			cout << "Mulai lagi (y/n) ? ";
			cin >> lagi;
				if(lagi=='Y' || lagi=='y'){
			        goto awal;
			    }
			    if (lagi=='N' || lagi=='n'){
			        goto selesai;
			    }
		}
		
		cout << endl;
		na = pembagi * (2 * p + 3 * t + 2 * uts + 3 * uas);
				
		if (na >= 85){
			cout << "Nilai Akhir Mata Kuliah " << matkul << " Anda : "<< na << endl;
			cout << "Predikat : A"<< endl;
		} else if (na >= 80 && na < 85){
			cout << "Nilai Akhir Mata Kuliah " << matkul << " Anda : "<< na << endl;
			cout << "Predikat : A-" << endl;
		} else if (na >= 75 && na < 80){
			cout << "Nilai Akhir Mata Kuliah " << matkul << " Anda : "<< na << endl;
			cout << "Predikat : B+" << endl;
		} else if (na >= 70 && na < 75){
			cout << "Nilai Akhir Mata Kuliah " << matkul << " Anda : "<< na << endl;
			cout << "Predikat : B" << endl;
		} else if (na >= 65 && na < 70){
			cout << "Nilai Akhir Mata Kuliah " << matkul << " Anda : "<< na << endl;
			cout << "Predikat : B-" << endl;
		} else if (na >= 60 && na < 65){
			cout << "Nilai Akhir Mata Kuliah " << matkul << " Anda : "<< na << endl;
			cout << "Predikat : C+" << endl;
		} else if (na >= 55 && na < 60){
			cout << "Nilai Akhir Mata Kuliah " << matkul << " Anda : "<< na << endl;
			cout << "Predikat : C" << endl;
		} else if (na >= 40 && na < 55){
			cout << "Nilai Akhir Mata Kuliah " << matkul << " Anda : "<< na << endl;
			cout << "Predikat : D" << endl;
		} else {
			cout << "Nilai Akhir Mata Kuliah " << matkul << " Anda : "<< na << endl;
			cout << "Predikat : E" << endl;
		}
			
		cout << endl;
	    
	cout << "Mulai lagi (y/n) ? ";
	cin >> lagi;
		if(lagi=='Y' || lagi=='y'){
	        goto awal;
	    }
	    if (lagi=='N' || lagi=='n'){
	        goto selesai;
	    }
	
	selesai:
	    system("cls");
	    cout<<"Selesai >.<"<<endl;
		
	cin.get();
	return 0;
}
