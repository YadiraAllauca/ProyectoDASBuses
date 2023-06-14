package dev.android.appbuses

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.Window
import dev.android.appbuses.databinding.ActivityMainBinding
import dev.android.appbuses.databinding.ActivityMainSkipBinding

class MainSkipActivity : AppCompatActivity() {
    private lateinit var binding : ActivityMainSkipBinding
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityMainSkipBinding.inflate(layoutInflater)
        requestWindowFeature(Window.FEATURE_NO_TITLE)
        supportRequestWindowFeature(Window.FEATURE_NO_TITLE)
        setContentView(binding.root)

        binding.btnFilter.setOnClickListener {
            val intent = Intent(this, FilterMenuActivity::class.java).apply {
            }
            startActivity(intent)
        }

        binding.btnLogin.setOnClickListener {
            val intent = Intent(this, LoginActivity::class.java).apply {
            }
            startActivity(intent)
        }

        binding.textView4.setOnClickListener {
            val intent = Intent(this, BusDetailActivity::class.java).apply {
                putExtra("option", "noLogin")
            }
            startActivity(intent)
        }
    }
}