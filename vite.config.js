import { execSync } from "node:child_process";

import * as glob from "glob";
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";
import banner from "vite-plugin-banner";

import tailwindcss from "@tailwindcss/vite";

const gitInfo = getGitInfo() || {
    repoUrl: "N/A",
    commitHash: "N/A",
    environment: "N/A",
    commitMessage: "N/A",
    contributors: "N/A",
};

const contributors = getAllContributors();

const environment = process.env.NODE_ENV || "development";
const developerInfo = `
**************************************************
*               Project Information              *
**************************************************

Repository:     ${gitInfo.repoUrl}
Commit Hash:    ${gitInfo.commitHash}
Environment:    ${environment}
Compiled at:    ${new Date().toLocaleString()}
Contributors:   ${contributors.join(", ")}

**************************************************
`;

const resources = [
    ...glob.sync("resources/js/**/*.{js,vue}"),
    ...glob.sync("resources/css/**/*.{css,scss}"),
    ...glob.sync("resources/fonts/**/*.{ttf,woff,woff2,eot}"),
    ...glob.sync("resources/images/**/*.{svg,png,jpg,gif}"),
];

export default defineConfig({
    plugins: [
        tailwindcss(),
        laravel({
            input: resources,
            refresh: true,
            cache: true,
        }),
        banner(developerInfo),
    ],
    build: {
        minify: "esbuild",
        chunkSizeWarningLimit: 500,
        sourcemap: environment === "development",
    },
    resolve: {
        alias: {
            "@": "/resources/",
        },
    },
    define: {
        "process.env.NODE_ENV": JSON.stringify(process.env.NODE_ENV),
    },
});

function getAllContributors() {
    try {
        const contributors = execSync("git log --format='%aN <%aE>'")
            .toString()
            .trim()
            .split("\n")
            .filter((value, index, self) => self.indexOf(value) === index);

        return contributors;
    } catch (error) {
        console.error("Error fetching local contributors:", error);
        return [];
    }
}

function getGitInfo() {
    try {
        const gitStatus = execSync("git status --porcelain -b")
            .toString()
            .trim()
            .split("\n");

        const branchName = gitStatus
            .find((line) => line.startsWith("##"))
            .replace("##", "")
            .trim();
        const commitHash = execSync("git rev-parse --short HEAD")
            .toString()
            .trim();
        const repoUrl = execSync("git config --get remote.origin.url")
            .toString()
            .trim();
        return { commitHash, branchName, repoUrl };
    } catch (error) {
        console.error("Error fetching Git information:", error);
        return {};
    }
}
