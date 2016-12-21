package com.example.vunamhuy.mylove;

import android.media.MediaPlayer;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.RelativeLayout;
import android.widget.TextView;

import java.util.ArrayList;

public class Music extends AppCompatActivity {
    RelativeLayout mh2;
    MediaPlayer song;
    TextView txtLoiNhan;
    ListView lvBaiHat;
    ArrayList<String> mangTenBH, mangLoiNhan;
    ArrayList<Integer> mangMp3;

    public void AnhXa() {
        mh2 = (RelativeLayout)findViewById(R.id.manHinh2);
        txtLoiNhan = (TextView)findViewById(R.id.textViewLoiNhan);
        lvBaiHat = (ListView)findViewById(R.id.listViewBaiHat);
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_music);
        AnhXa();

        // music background
        song = MediaPlayer.create(getApplicationContext(), R.raw.lamvoanhnhe);
        song.start();
        mh2.setBackgroundResource(R.drawable.bg3);
        txtLoiNhan.setText("Chúc em giáng sinh vui vẻ nhé!");
    }

    public void TaoMang() {
        mangTenBH = new ArrayList<String>();
        mangLoiNhan = new ArrayList<String>();
        mangMp3 = new ArrayList<Integer>();

    }
}
