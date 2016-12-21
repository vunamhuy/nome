package com.example.vunamhuy.mylove;

import android.media.MediaPlayer;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.RelativeLayout;
import android.widget.TextView;

public class Music extends AppCompatActivity {
    RelativeLayout mh2;

    public void AnhXa() {
        mh2 = (RelativeLayout)findViewById(R.id.manHinh2);
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_music);
        AnhXa();

        mh2.setBackgroundResource(R.drawable.bg3);
    }
}
