import os
import datetime

#作成するディレクトリのpathを指定
study_index = 2

# ディレクトリ一覧取得
dir_list = os.listdir('./')

for i in range(1, 15):
    # dir_listにiで「始まる」ディレクトリがあるかどうかを判定する
    if any([d for d in dir_list if d.startswith(f'{i:02}_')]):
        print(f'{i:02}_が既に存在します。')
    else:
        print(f'{i:02}_が存在しません。')
        study_index = i
        break

# 日付を取得する
today = datetime.datetime.now()
today_str = today.strftime('%Y-%m-%d')

make_dir_path = f'./{study_index:02}_{today_str}/'

#作成しようとしているディレクトリが存在するかどうかを判定する
if os.path.isdir(make_dir_path):
    #既にディレクトリが存在する場合は何もしない
    pass
else:
    #ディレクトリが存在しない場合のみ作成する
    os.makedirs(make_dir_path)

# .gitkeepファイルを作成する
with open(f'{make_dir_path}.gitkeep', 'w') as f:
    print(f'{make_dir_path}.gitkeepを作成しました。')

