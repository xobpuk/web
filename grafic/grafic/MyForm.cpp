#include <fstream>
#include "MyForm.h"
using namespace std;
// Required namespaces
           using namespace System;
           using namespace System::Windows::Forms;

           // Application entry point
           [STAThreadAttribute]
           void main(cli::array<String^>^ args){
               // Initial Application Parameters:
               Application::EnableVisualStyles();
               Application::SetCompatibleTextRenderingDefault(false);

               // ChartCPP - name of your project / namespace of your project
               // MyFormMyForm - name of the form to launch
               Grafic::MyForm form;
               Application::Run(% form);
           }

           System::Void Grafic::MyForm::âûõîäToolStripMenuItem_Click(System::Object^ sender, System::EventArgs^ e)
           {
               if (MessageBox::Show("Exit?", "Attention!", MessageBoxButtons::YesNo) == Windows::Forms::DialogResult::Yes) {
                   Application::Exit();
               }
           }

           System::Void Grafic::MyForm::ïîñòðîèòüÃðàôèêToolStripMenuItem_Click(System::Object^ sender, System::EventArgs^ e)
           {
               if (checkBox1->Checked == false && checkBox2->Checked == false) {
                   MessageBox::Show("Select at least one chart!", "Attention!");
                   return;
               }

               if (textBox_a->Text == "" || textBox_b->Text == "" || textBox_h->Text == "") {
                   MessageBox::Show("Default parameters!", "Attention!");
                   DefaultParams();
               }
               else {
                   a = Convert::ToDouble(textBox_a->Text);
                   b = Convert::ToDouble(textBox_b->Text);
                   h = Convert::ToDouble(textBox_h->Text);
               }

               if (checkBox1->Checked) {
                   double x = a;
                   this->chart->Series[0]->Points->Clear();
                   while (x <= b)
                   {
                      double y = x*x*x-2*x*x;
                       this->chart->Series[0]->Points->AddXY(x, y);
                       x += h;
                   }
               }
           
               
               if (checkBox2->Checked) {

                   ifstream out("C:\\Users\\Àíäðåé\\Desktop\\4eb\\vivod.txt");
                   double i, w,step;
                   out >> step;
                   out >> i >> w;
                   while (a < i) {
                       out >> i;
                       out >> w;
                   }
                   double x = a;
                   this->chart->Series[1]->Points->Clear();
                 
                  
                   while (x <= b)
                   {
                           double y = w;
                           this->chart->Series[1]->Points->AddXY(x, y);
                           x += step;
                           out >> i >> w;
                      
                   }
                   out.close();
               }
           }

           System::Void Grafic::MyForm::î÷èñòèòüÃðàôèêToolStripMenuItem_Click(System::Object^ sender, System::EventArgs^ e)
           {
               if (checkBox1->Checked == false && checkBox2->Checked == false) {
                   MessageBox::Show("Choose at least one chart!", "Attention!");
                   return;
               }

           if (checkBox1->Checked) {
               this->chart->Series[0]->Points->Clear();
           }

           if (checkBox2->Checked) {
               this->chart->Series[1]->Points->Clear();
           }
}
      
           void Grafic::MyForm::DefaultParams()
           {


               a = -10;
               b = 10;
               h = 0.1;

           }

