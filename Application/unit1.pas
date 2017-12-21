unit Unit1;

{$mode objfpc}{$H+}

interface

uses
  Classes, SysUtils, FileUtil, Forms, Controls, Graphics, Dialogs, StdCtrls,
  ExtCtrls, fphttpclient;

type

  { TForm1 }

  TForm1 = class(TForm)
    Button1: TButton;
    Button2: TButton;
    Edit1: TEdit;
    Edit2: TEdit;
    Edit3: TEdit;
    Edit4: TEdit;
    Edit5: TEdit;
    Image1: TImage;
    Label1: TLabel;
    procedure Button1Click(Sender: TObject);
    procedure Button2Click(Sender: TObject);
  private
    { private declarations }
  public
    { public declarations }
  end;

var
  Form1: TForm1;

implementation

{$R *.lfm}

{ TForm1 }

procedure TForm1.Button1Click(Sender: TObject);
begin
  Label1.Caption:=TFPCustomHTTPClient.SimpleFormPost('http://ksysiu.one.pl/iBank/check.php','user='+Edit1.Text+'&pass='+Edit2.Text);
  if Label1.Caption<>'' then
  begin
    Edit1.Enabled:=false;
    Edit2.Enabled:=false;
    Button1.Enabled:=false;
    Edit3.Enabled:=true;
    Edit4.Enabled:=true;
    Edit5.Enabled:=true;
    Button2.Enabled:=true;
  end;
end;

procedure TForm1.Button2Click(Sender: TObject);
begin
  Label1.Caption:=TFPCustomHTTPClient.SimpleFormPost('http://ksysiu.one.pl/iBank/transfer.php','from='+Edit1.Text+'&pass='+Edit2.Text+'&to='+Edit3.Text+'&amount='+Edit4.Text+'&title='+Edit5.Text);
  Button1Click(Self);
end;

end.

